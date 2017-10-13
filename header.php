<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php echo('<title>' . get_title() . '</title>'); ?>
        <?php add_styles(); ?>
	</head>
    <body>
        <nav class="navbar fixed-top navbar-expand-md navbar-dark title_bar">
            <img class="title_image d-none d-sm-block" src="images/MeSmall.png">
            <h1 class="navbar-brand title_text">Wayne Cassidy BscH</h1>
            
            <button class="navbar-toggler toggler_override" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php add_menu(); ?> 
        </nav>
        <div class="code_image"></div>
