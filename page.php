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
 * @package coopers
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="hero">
			<div class="container">
				<div>
					<h1 class="hero__titulo"><strong>Organize</strong><br>your daily jobs</h1>
					<p class="hero__slogan">
						The only way to get things done.
					</p>

					<button class="hero__botao" onclick="location.href='#todolist'" >Meet the To-do list</button>
				</div>
 
				<img src="https://simple.tec.br/front-coopers/wp-content/uploads/2022/09/02.jpg" class="hero__img">
			</div>
		</section>

		<section class="todolist" id="todolist">
			<div class="container">
				<h2 class="todolist__titulo">
				To-do List
				</h2>
	
				<p class="todolist__descricao">
				Choose the right plan for you and get in touch through our contact form. We are here to help.
				</p>
			</div>
		</section>

		<section class="planos">
			<div class="container">
				<ul class="planos__lista">
					<li class="plano">
						<span class="plano__preco">
							R$ 20 / mês
						</span>
						<h3 class="plano__titulo">
							Basic Plan
						</h3>
						<p class="plano__descricao">
							unlimited tasks
						</p>

						<ul class="plano__beneficios">
							<li class="beneficio">
								<div class="beneficio__check" id="yes">

								</div>
								Create to-do lists
							</li>
							<li class="beneficio">
								<div class="beneficio__check" id="yes"></div>
								Share lists via WhatsApp
							</li>
							<li class="beneficio">
								<div class="beneficio__check" id="no"></div>
								Offline mode
							</li>
							<li class="beneficio">
								<div class="beneficio__check" id="no"></div>
								Invite colaborators
							</li>
							<li class="beneficio">
								<div class="beneficio__check" id="no"></div>
								Dark mode
							</li>
						</ul>

						<button class="plano__botao">
							get in touch
						</button>
					</li>
					<li class="plano">
						<span class="plano__preco">
							R$ 30 / mês
						</span>
						<h3 class="plano__titulo">
							Pro  Plan
						</h3>
						<p class="plano__descricao">
							unlimited everything
						</p>

						<ul class="plano__beneficios">
							<li class="beneficio">
								<div class="beneficio__check" id="yes"></div>
								Create to-do lists
							</li>
							<li class="beneficio">
								<div class="beneficio__check" id="yes"></div>
								Share lists via WhatsApp
							</li>
							<li class="beneficio">
								<div class="beneficio__check" id="yes"></div>
								Offline mode
							</li>
							<li class="beneficio">
								<div class="beneficio__check" id="yes"></div>
								Invite colaborators
							</li>
							<li class="beneficio">
								<div class="beneficio__check" id="yes"></div>
								Dark mode
							</li>
						</ul>

						<button class="plano__botao">
							get in touch
						</button>
					</li>
				</ul>
			</div>
		</section>

		<section class="posts">
			<div class="container">

				<div class="posts__bg">
					<div class="posts__info">
						
						<h2 class="posts__titulo">good things</h2>
						<ul class="posts__lista">
						

<?php
	//implementando posts
	$rand_posts = get_posts('numberposts=5');
	

	foreach( $rand_posts as $post ) :
		$postagem = [
			"titulo" => get_the_title(),
			"imagem" => esc_url(wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' )[0]),
			"categoria" => get_the_category()[0]->cat_name,
			"link" => get_permalink()
		];
		// "link" => esc_html(the_permalink())
?>
		<li class='post'>
			<div class='post__img' style="background-image: url('<?php echo $postagem['imagem'];?>')">
				<div class='post__detalhe'></div>
			</div>
			<div class='post__info'>
				<h3 class='post__categoria'>
				<?php echo $postagem['categoria'] ;?>
				</h3>
				<p class='post__titulo'>
				<?php echo $postagem['titulo'];?>
				</p>
				<a href="<?php echo esc_html($postagem['link']); ?>" class='post__link'>read more</a>
			</div>
		</li>
		
<?php		
		
	endforeach;
?>
						</ul>

								
					</div>

					<ul class="posts__bullets">
						<a href="#" class="posts__bullet post__bullet-ativo"></a>
						<!-- <a href="#" class="posts__bullet"></a>
						<a href="#" class="posts__bullet"></a>
						<a href="#" class="posts__bullet"></a> -->
					</ul>
				</div>

			</div>
		</section>
		<section class="mensagem">
			<div class="container">
				
				<form action="" class="mensagem__form">

					<div class="mensagem__header">
						<div class="mensagem__header-detail"></div>
						<img src="https://simple.tec.br/front-coopers/wp-content/uploads/2022/09/form.png" alt="" class="mensagem__header-img">
					</div>

					<div class="mensagem__titulo">
						<div class="mensagem__titulo-icone"></div>
						<h2 class="mensagem__titulo-texto">GET IN <br><span>TOUCH</span></h2>
					</div>

					<div class="mensagem__campo">
						<label for="name" class="mensagem__label">Your name</label>
						<input type="text" class="mensagem__input mensagem__input-text" id="name" placeholder="type your name here...">
					</div>

					<div class="mensagem__campo-metade">
						<div class=" mensagem__campo">
							<label for="email">Email*</label>
							<input type="Email" class="mensagem__input mensagem__input-email" id="email" placeholder="example@example.com">
						</div>
						
						<div class="mensagem__campo">
							<label for="tel">Telephone*</label>
							<input type="tel" class="mensagem__input mensagem__input-tel" id="tel" placeholder="(__)_____-_____">
						</div>
					</div>
						
					<div class="mensagem__campo">
						<label for="message">Message*</label>
						<textarea name="message" id="message" class="mensagem__input mensagem__input-textarea" placeholder="Type what you want to say to us"></textarea>
					</div>

					<input type="submit" value="SEND NOW" class="mensagem__botao">
				</form>

			</div>
		</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
