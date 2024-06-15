<?php

namespace Php\Projetomvc\Models\Domain;

class Books
{
    private $bookId;
    private $title;
    private $authorId;
    private $genre;
    private $publishedYear;

    public function __construct($bookId, $title, $authorId, $genre, $published_Year)
    {
        $this->setBookId($bookId);
        $this->setTitle($title);
        $this->setAuthorId($authorId);
        $this->setGenre($genre);
        $this->setPublishedYear($published_Year);
    }

    public function getBookId()
    {
        return $this->bookId;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthorId()
    {
        return $this->authorId;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function getPublishedYear()
    {
        return $this->publishedYear;
    }

    public function setBookId($bookId)
    {
        $this->bookId = $bookId;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function setPublishedYear($publishedYear)
    {
        $this->publishedYear = $publishedYear;
    }
}

?>
