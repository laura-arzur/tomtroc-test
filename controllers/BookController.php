<?php

class BookController
{

    /**
     * Affiche tous les livres disponibles à l'échange. 
     * @return void
     */
    public function showAllAvailableBooks(): void
    {
        $bookManager = new BookManager();
        $books = $bookManager->getAllAvailableBooks();

        $view = new View("Nos livres à l'échange");
        $view->render("books", ['books' => $books]);
    }

    /**
     * Affiche le détail d'un livre.
     * @return void
     */
    public function showBook(): void
    {
        $id = Utils::request("id", -1);

        if (gettype($id) !== "interger") {
            throw new Exception("Le livre demandé n'existe pas.");
            // TODO Rediriger par la suite
        }

        $bookManager = new BookManager();
        $book = $bookManager->getBookById($id);

        if (!$book) {
            throw new Exception("Le livre demandé n'existe pas.");
        }

        $view = new View($book->getTitle());
        $view->render("singleBook", ['book' => $book]);
    } 

    /**
     * Affiche le formulaire de modification d'un livre.
     * @return void
     */
    public function editBook(): void
    {
        $id = Utils::request("id", -1);

        if (gettype($id) !== "interger") {
            throw new Exception("Le livre demandé n'existe pas.");
            // TODO Rediriger par la suite
        }

        $bookManager = new BookManager();
        $book = $bookManager->getBookById($id);

        if (!$book) {
            throw new Exception("Le livre demandé n'existe pas.");
        }

        $view = new View("Edition du livre");
        $view->render("bookForm");
    }

}
