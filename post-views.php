<?php
abstract class Post {
    protected $title;
    protected $description;
    protected $image;
    protected $id;

    public function __construct($title, $description, $image, $id){
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->id = $id;
    }
}

class Image extends Post{
public function showPost(){
    echo '<article class="card mb-4">';
    echo '        <div class="post-slider">';
    echo '               <img src="'.$this->image.'" class="card-img-top" alt="post-thumb">';
    echo '         </div>';
    echo '        <div class="card-body">';
    echo '         <h3 class="mb-3"><a class="post-title"';
    echo 'href="post.php?id='.$this->id.'">'.$this->title.'</a></h3>';
    echo '  <ul class="card-meta list-inline">';
    echo ' <li class="list-inline-item">';
    echo '    <a href="author-single.html" class="card-meta-author">';
    echo '    <img src="images/john-doe.jpg">';
    echo '   <span>Mark Dinn</span>';
    echo ' </a>';
    echo '</li>';
    echo '<li class="list-inline-item">';
    echo '   <i class="ti-timer"></i>2 Min To Read';
    echo '</li>';
    echo '<li class="list-inline-item">';
    echo '   <i class="ti-calendar"></i>14 jan, 2020';
    echo ' </li>';
    echo ' <li class="list-inline-item">';
    echo '    <ul class="card-meta-tag list-inline">';
    echo '   <li class="list-inline-item"><a href="tags.html">Decorate</a></li>';
    echo '   <li class="list-inline-item"><a href="tags.html">Creative</a></li>';
    echo '  </ul>';
    echo ' </li>';
    echo ' </ul>';
    echo ' <p>'.$this->description.'</p>';
    echo '<a href="post.php?id='.$this->id.'" class="btn btn-outline-primary">Read More</a>';
    echo ' <a href="edit.php?id='.$this->id.'" class="btn btn-outline-secondary">Edit post</a>';
    echo ' <a href="delete.php?id='.$this->id.'" class="btn btn-outline-danger">Delete post</a>';
    echo ' </div> ';
    echo ' </article>';
}
}
class Text extends Post {
    public function showPost(){
        echo '<article class="card mb-4">';
        echo '        <div class="card-body">';
        echo '         <h3 class="mb-3"><a class="post-title"';
        echo '       href="post.php?id='.$this->id.'">'.$this->title.'</a></h3>';
        echo '  <ul class="card-meta list-inline">';
        echo ' <li class="list-inline-item">';
        echo '    <a href="author-single.html" class="card-meta-author">';
        echo '    <img src="images/john-doe.jpg">';
        echo '   <span>Mark Dinn</span>';
        echo ' </a>';
        echo '</li>';
        echo '<li class="list-inline-item">';
        echo '   <i class="ti-timer"></i>2 Min To Read';
        echo '</li>';
        echo '<li class="list-inline-item">';
        echo '   <i class="ti-calendar"></i>14 jan, 2020';
        echo ' </li>';
        echo ' <li class="list-inline-item">';
        echo '    <ul class="card-meta-tag list-inline">';
        echo '   <li class="list-inline-item"><a href="tags.html">Decorate</a></li>';
        echo '   <li class="list-inline-item"><a href="tags.html">Creative</a></li>';
        echo '  </ul>';
        echo ' </li>';
        echo ' </ul>';
        echo ' <p>'.$this->description.'</p>';
        echo ' <a href="post.php?id='.$this->id.'" class="btn btn-outline-primary">Read More</a>';
        echo ' <a href="edit.php?id='.$this->id.'" class="btn btn-outline-secondary">Edit post</a>';
        echo ' <a href="delete.php?id='.$this->id.'" class="btn btn-outline-danger">Delete post</a>';
        echo ' </div> ';
        echo ' </article>';
    }
}