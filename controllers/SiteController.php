<?php

include_once ROOT.'/models/site.php';

class SiteController
{
     public function actionIndex($idAuthor = 1)
    {
        $idPaginator = isset($_POST['id']) ? $_POST['id'] : $idAuthor;

        $total = run::getTotalAuthors();

         if ($idPaginator == '>')
         {
             $idPaginator = ceil($total / 3);
         } elseif ($idPaginator == '<')
         {
             $idPaginator = 1;
         }

        $authors = array();
        $authors = run::showAuthorsLimit($idPaginator);
        
        $pagination = new Pagination ($total, $idPaginator, 3,'');
        
        require_once (ROOT.'/views/site/index.php');
    }
    
    public function actionBooks($id = 1, $pages = 1, $paginationLimit = 2)
    {
        $limit = isset($_POST['select']) ? $_POST['select'] : $paginationLimit;

        $authors = array();
        $authors = run::showAuthors($id);   
        
        $total = run::getTotalBooks($id);

        $page = isset($_POST['page']) ? $_POST['page'] : $pages;

        if ($page == '<')
        {
            $page = 1;
        } elseif ($page == '>')
        {
            $page = ceil($total / $limit);
        }

        $books = array();
        $books = run::showBooks($id, $page, $limit);

        $pagination = new paginationBooks ($total, $page, $limit,'page-');

        if($limit == 2){
            require_once (ROOT.'/views/site/books.php');
        } elseif ($limit !== 2)
        {
            require_once (ROOT.'/views/site/limitBooks.php');
        }
    }
}