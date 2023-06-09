<?php

namespace App\Controllers;

use App\Models\seznamknih as AModel;
use App\Models\modelB as BModel;
class Main extends BaseController
{


    function __construct(){
        $this->AModel = new AModel();
        $this->BModel = new BModel();
    }
   
    public function editPage ()
    {
        $data["seznam"] = $this->AModel->orderBy("idZanr", "nazevZ")->findAll();
        $data["title"] = "edit Page";
        return view('editPage',$data);
    }     
    public function mainpage ()
    {
        $data["seznam"] = $this->AModel->orderBy("idZanr", "nazevZ")->findAll();
        $data["title"] = "Druhy žánrů";
        return view('mainpage',$data);
    }       
    public function addForm()
    {
        $data["title"] = "Přidávání kategorie";    
        echo view('addItem', $data);
    
    }
    public function knihyZanru($idZanru)
    {
        
        // $idZanry = $this -> AModel -> join("kniha", "kniha.zanr_idZanr=zanr.idZanr","inner")->where ('idZanr', $idZanru) ->findAll();
        // $data["seznam"] = $this->BModel->join("zanr","zanr.idZanr=kniha.zanr_idZanr","inner")->where("zanr_idZanr",$idZanry)->orderBy('idkniha','asc')->paginate($this->config->pagerDomu)->findAll();
        // $data["title"] = "knihy";
        // $data["pager"] = $this->BModel -> pager;

        $data["seznam"]  = $this -> AModel -> join("kniha", "kniha.zanr_idZanr=zanr.idZanr","inner")-> where ('idZanr', $idZanru) ->orderBy('idkniha','asc')->paginate(5) ;
        $data["title"] = "knihy";
        $data["pager"] = $this->AModel -> pager;

        return view('knihyZanru',$data);
    }
    public function presnakniha($lum)

    {
        $data["seznam"] = $this -> BModel-> join("autor","autor.idautor = kniha.autor_idautor","inner")->find($lum);
        $data["title"] = "Podrobnosti komponentů";

        return view('presnakniha', $data);
    }

     public function create()
    {
        $nazev = $this->request->getPost("nazevZ");
        $id = $this->request->getPost("idZanr");

        $data = [
            "nazevZ" => $nazev,
            "idZanr" => $id
            // "URL" => $url
        ];

        $this->AModel->insert($data);
        return redirect()->route("editPage");
    }
    public function edit($id = null){
    
    $data['seznam'] = $this->AModel->find($id);
    echo view('edit', $data);
    }
    public function upravit(){

            $nazev = $this->request->getPost('nazevZ');
        
            // $url = $this->request->getPost('URL');
        
            $id = $this->request->getPost('idZanr');
        
        
            $data = array(
        
              'nazevZ' => $nazev,
        
            //   'url' => $url,
        
              'idZanr' => $id
        
            );
        
            $this->AModel->save($data);
        
            return redirect()->route('editPage');
        
          }
        
        

    public function delete($id){
        $this->AModel->where('idZanr', $id)->delete();
        return redirect()->route("editPage");
    }

}