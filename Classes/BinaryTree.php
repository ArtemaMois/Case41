<?php 
require "Noda.php";

class BinaryTree
{
    private $root;

    public function __construct()
    {
        $this->root = NULL;
    }

    private function is_empty ()
    {
        return is_null($this->root);
    }

    public function getroot()
    {
        return $this->root;
    }

    public function Insert($title, $date, $descript)
    {
        $node = new Noda($title, $descript, $date);

        if ($this->is_empty($this->root)) {
            $this->root = $node;
            return;
        }

        $this->InsertNode($this->root, $node);
    }

    private function InsertNode($subroot,$node){

        if (strtotime($node->getdate()) > strtotime($subroot->getdate())){
            if ($subroot->left == NULL){
                $subroot->left = $node;
            }else{
                $this->InsertNode($subroot->left, $node);
            }

        }

        if (strtotime($node->getdate()) < strtotime($subroot->getdate())){
            if($subroot->right == NULL){
                $subroot->right = $node;
            }else{
                $this->InsertNode($subroot->right, $node);
            }
        }

        if ($node->getdate() == $subroot->getdate()){
            echo 'Паттерн с такой датой уже есть'.'<br>';
        }
    }

    public function Show($node)
    {
        if ($node->left != NULL) {
            $this->Show($node->left);
        }
        echo " ----- Новый паттерн -----".'<br>';
        echo "Название: ".$node->gettitle().'<br>';
        echo "Описание:".$node->getdate().'<br>';
        echo "Дата создания:".$node->getdescript().'<br>'.'<br>';
        if ($node->right != NULL) {
            $this->Show($node->right);
        }
    }

}
