<!DOCTYPE html>
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title>Thinking with flexbox</title>
        <link rel="stylesheet" href="/flexbox/assets/bootstrap.min.css">
        <link rel="stylesheet" href="/flexbox/assets/flex.css">
        <style>
            h1 { font-size: 3em; }
            p, li { font-size: 1.5em; }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/flexbox">The <span style="color: #fff;">power</span> of flexbox</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php if(isset($prevPage)): ?>
                    <li>
                        <a href="/flexbox/page/<?= $prevPage ?>">Prev</a>
                    </li>
                    <?php endif; ?>
                    <?php if(isset($nextPage)): ?>
                    <li>
                        <a href="/flexbox/page/<?= $nextPage ?>">Next</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        </nav>
        <div class="container">
        <br />