<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <title>add</title>
</head>
<body>
    <form method="post" action="<?php echo site_url('news/submit'); ?>">
        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Author</label>
            <input type="text" name="author" class="form-control" id="exampleFormControlInput1" placeholder="Author">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Image URL</label>
            <input type="text" name="imageurl" class="form-control" id="exampleFormControlInput1" placeholder="ImageURL">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Content</label>
            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Source</label>
            <input name="source" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Where You get the News From ">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
</body>
</html>