<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test-technique
 */

get_header();
?>
<?php
$titre_du_hero = get_field('titre_hero');
$second_titre = get_field('title_number2');
$texte_du_hero = get_field('texte_hero');
$second_texte = get_field('texte_number2');
$label_du_bouton = get_field('label_button');
$tableau_image = get_field('background_hero');
$tableau_image_decorative = get_field('image_decorative');
$url_image = '';
$url_image_deco = '';

if ($tableau_image) {
	$url_image = $tableau_image['sizes']['large'];
}
if ($tableau_image_decorative) {
	$url_image_deco = $tableau_image_decorative['sizes']['large'];
}
?>
	<main id="primary" class="site-main">
		<div class="box-principale">
				<?php if ($url_image) : ?>
					<div class="box-haute" style="--bg-image-url: url('<?php echo esc_url($url_image); ?>');">
						<div class="contenu-hero">
							<?php if ($titre_du_hero) : ?>
            					<div class="box-titre">
                					<h1><?php echo esc_html($titre_du_hero); ?></h1>
            					</div>
								<div class="rectangle-vert"></div>
        					<?php endif; ?>
        					<?php if ($texte_du_hero) : ?>
            					<div class="box-texte">
                					<p><?php echo esc_html($texte_du_hero); ?></p>
            					</div>
        					<?php endif; ?>
						</div>
                    </div>
            	<?php else : ?>
                	<div class="box-haute"></div>
            	<?php endif; ?>
				<div class="box-basse">
					<?php if ($url_image_deco) : ?>
						<div class="box-image-deco">
							<img src="<?php echo esc_url($url_image_deco); ?>" alt="<?php echo esc_attr($tableau_image_decorative['alt']); ?>">
        				</div>
						<?php endif; ?>
							<div class= "second-contenu">
								<?php if ($second_titre) : ?>
									<div class= "second-titre">
										<h2><?php echo esc_html($second_titre); ?></h2>
									</div>
								<?php endif; ?>
								<?php if ($second_texte) : ?>
									<div class="second-texte">
										<p>
											<?php
												$position_interrogation = strpos($second_texte, '?');
												if ($position_interrogation !== false) {
													$partie1 = substr($second_texte, 0, $position_interrogation + 1);
													$partie2 = substr($second_texte, $position_interrogation + 1);
													echo '<strong class="texte-question">' . esc_html($partie1) . '</strong><br>' . esc_html(trim($partie2));
												} else {
													echo esc_html($second_texte);
												}
											?>
										</p>
									</div>
								<?php endif; ?>
								<?php if ($label_du_bouton) : ?>
									<div class="box-bouton">
										<a href="" class="bouton-site">
											<?php echo esc_html($label_du_bouton); ?> →
										</a>
									</div>
								<?php endif; ?>
            				</div>
        		</div>
		</div>
    </main><?php
get_sidebar();
get_footer();