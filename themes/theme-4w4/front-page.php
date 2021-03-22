<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

get_header();
?>
<!-- ARCHIVE.PHP --> ///////////////// FRONT-PAGE.PHP
	<!-- CARROUSEL ////////////////// -->
	<section class="carrousel"> 
		<div class="carr1">1</div>
		<div class="carr2">2</div>
		<div class="carr3">3</div>
	</section>

	<!-- les boutons -->
	<!-- <button id='un'>1</button> 
	<button id='deux'>2</button>
	<button id='trois'>3</button> -->

	<section class="boutRadio">
		<input type="radio" id="un" name="carrousel" checked>
		<input type="radio" id="deux" name="carrousel">
		<input type="radio" id="trois" name="carrousel">
	</section> <!-- FIN CARROUSEL ////////////////// -->

	<main id="primary" class="site-main">
	

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			
		<section class="list-cours">
			<?php
			/* Start the Loop */
            $precedent = "XXXXXX";
			while ( have_posts() ) :
				the_post();
				// 582-1J1 Animation et interactivité en jeu (75h)
                $titre_grand = get_the_title();
				$session  = substr($titre_grand, 4, 1);
				$nbHeure = substr($titre_grand, -4, 3);
				$titre = substr($titre_grand, 8, -6);
				$sigle = substr($titre_grand, 0, 7);
				$typeCours = get_field('type_de_cours'); 
				if ($precedent != $typeCours): ?>
					<?php if ($precedent != "XXXXXX"): ?>
						</section>
						<?php endif ?>
						<h2><?php echo $typeCours ?></h2>
					<section>
					<?php endif ?>
				<article class="<?php echo $typeCours ;?>">
					<p><?php echo $sigle . " - " . $nbHeure . " - " . $typeCours; ?> </p>
					<a href="<?php echo get_permalink(); ?>"><?php echo $titre; ?></a>
					<p>Session : <?php echo $session ; ?> </p>
				</article>

				<!-- condition spéciale pour donner classe à Image 2d/3d sans bug -->
				<?php if ($typeCours == "Image 2d/3d") { /* ?>
					<article class="Image2d3d"> <?php */ } ?> <!-- mis en commentaire, car ça fait 
					tout bug l'affichage de Image2d3d seulement -->

			<?php
			$precedent = $typeCours;
					endwhile; ?>
			</section>
		<?php else :
		endif; ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
