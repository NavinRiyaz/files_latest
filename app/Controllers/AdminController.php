<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FilesModel;
use App\Models\RolesModel;
use App\Models\UserModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Paths;
use Psr\Log\LoggerInterface;
use ReflectionException;

class AdminController extends BaseController
{

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        helper(['url', 'form', 'basic']);
    }

    public function index()
    {
        return view('admin/index');
    }

    /**
     * @throws ReflectionException
     */
    public function addFile(){

        $data = [];

        if ($this->request->getMethod() == 'post'){

            $rules = [
                'fileName' => 'required|min_length[4]',
                'fileID' => 'required|is_unique[files.file_id]',
                'reminder' => 'required',
                'fileDescription' => 'required',
            ];

            $errors = [
                'fileName' => [
                    'required' => 'File Name is Required',
                    'min_length' => 'File Enter minimum 4 Letters',
                ],
                'fileID' => [
                    'required' => 'File ID is Required',
                    'is_unique' => 'Please Enter Unique File ID'
                ],
                'reminder' => [
                    'required' => 'Please enter file reminder (In days)',
                ],
                'fileDescription' => [
                    'required' => 'Please enter file description.'
                ],
            ];

            if (!$this->validate($rules, $errors)){
                return view('admin/files/add_files', [
                    'validation' => $this->validator,
                ]);
            } else {
                $getFile = $this->request->getFile('files');
                $fileName = $getFile->getFilename();

                if ($getFile->move('assets/uploads/files/', $fileName)){
                    $file = new FilesModel();
                    $data = [
                        'file_name' => $this->request->getVar('fileName'),
                        'file_id' => $this->request->getVar('fileID'),
                        'file_reminder' => $this->request->getVar('reminder'),
                        'file_description' => $this->request->getVar('fileDescription'),
                        'file_path' => 'assets/uploads/files/'.$fileName,
                        'uploaded_by' => session()->get('role'),
                        'uploaded_id' => session()->get('id'),
                        'uploaded_ip' => $this->request->getIPAddress(),
                    ];

                    if ($file->insert($data)){
                        return redirect()->to(base_url("admin/add-file"))->with('success', 'Your File Uploaded!');
                    } else {
                        return redirect()->to(base_url("admin/add-file"))->with('error', 'File Upload Failed!');
                    }
                }
            }

        }

        return view('admin/files/add_files');
    }

    public function manageFiles(){

        $fileModel = new FilesModel();
        $files = $fileModel->findAll();
        return view('admin/files/manage_files', [
            'files' => $files,
        ]);
    }

    public function addUsers(){
        $data = [];
        $roleModel = new RolesModel();
        $role = $roleModel->findAll();

        if ($this->request->getMethod() == 'post'){

            $rules = [
                'name' => 'required',
                'username' => 'required',
                'password' => 'required',
                'section' => 'required',
            ];

            if (!$this->validate($rules)){
                return view('admin/users/add_users', [
                    'validation' => $this->validator,
                ]);
            } else {

            }

        }
        return view('admin/users/add_users', $role);
    }


}












