<?php
/**
 * Main landing page template.
 *
 * @package Elevate_WPO
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
	<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Elevate, inicio">
		<svg class="brand-mark" viewBox="0 0 100 100" role="img" aria-label="Elevate"><circle cx="50" cy="50" r="45" fill="#2d91a7"/><path d="M28 10 75 50 28 90l15-40z" fill="#8fd6c9" stroke="#102b38" stroke-width="3"/><circle cx="50" cy="50" r="45" fill="none" stroke="#2d91a7" stroke-width="7"/></svg>
		<span class="brand-name">ELEVATE<span>EN MARKETING DIGITAL</span></span>
	</a>
	<nav class="nav" aria-label="Navegación principal">
		<a href="#servicios">Servicios</a>
		<a href="#metodo">Método</a>
		<a class="button" href="#contacto">Hablemos</a>
	</nav>
</header>

<main>
	<section class="hero">
		<div class="hero-inner">
			<div class="eyebrow">WPO · WordPress · Core Web Vitals</div>
			<h1>Tu web rápida. Tu negocio imparable.</h1>
			<p>Optimizamos WordPress para que cargue en un instante, convierta más y enamore a Google. Sin complicaciones y con resultados medibles.</p>
			<div class="hero-actions">
				<a class="button" href="#contacto">Mejorar mi web</a>
				<a class="text-link" href="#servicios">Descubre cómo →</a>
			</div>
			<div class="proof"><span><strong>90+</strong> puntuación PageSpeed</span><span><strong>0,8 s</strong> hasta el primer byte</span><span><strong>100%</strong> enfocado en WPO</span></div>
		</div>
	</section>

	<section class="section" id="servicios">
		<div class="section-inner">
			<div class="section-heading">
				<div class="eyebrow">Lo que hacemos</div>
				<h2>Más velocidad, más oportunidades.</h2>
				<p>Un servicio técnico y cercano para que tu WordPress ofrezca la experiencia que tus clientes esperan.</p>
			</div>
			<div class="cards">
				<article class="card"><div class="card-icon">↯</div><h3>Auditoría WPO</h3><p>Analizamos cada capa de tu web y te entregamos un mapa claro de mejoras prioritarias.</p></article>
				<article class="card"><div class="card-icon">◒</div><h3>Core Web Vitals</h3><p>Trabajamos LCP, INP y CLS para que tu web cumpla los estándares reales de Google.</p></article>
				<article class="card"><div class="card-icon">↗</div><h3>Optimización continua</h3><p>Imágenes, caché, código y servidor afinados para mantener el rendimiento a largo plazo.</p></article>
			</div>
		</div>
	</section>

	<section class="section band" id="metodo">
		<div class="section-inner">
			<div class="section-heading"><div class="eyebrow">Nuestro método</div><h2>Rendimiento que se nota.</h2><p>Un proceso simple, transparente y orientado a resultados.</p></div>
			<div class="steps">
				<div><div class="step-number">01</div><h3>Medimos</h3><p>Establecemos una línea base con datos de usuarios reales y laboratorio.</p></div>
				<div><div class="step-number">02</div><h3>Optimizamos</h3><p>Aplicamos mejoras de alto impacto sin romper tu diseño ni tus funcionalidades.</p></div>
				<div><div class="step-number">03</div><h3>Verificamos</h3><p>Comprobamos cada avance y te mostramos cómo evoluciona tu puntuación.</p></div>
			</div>
		</div>
	</section>

	<section class="cta" id="contacto">
		<div class="section-inner">
			<div class="eyebrow">¿Empezamos?</div>
			<h2>El mejor servicio al mejor precio.</h2>
			<p>Cuéntanos qué necesita tu WordPress y te proponemos el siguiente paso, sin letra pequeña.</p>
			<a class="button" href="mailto:hola@elevatewpo.com">Solicitar diagnóstico</a>
		</div>
	</section>
</main>
<footer class="site-footer"><div class="footer-inner"><span>© <?php echo esc_html( gmdate( 'Y' ) ); ?> Elevate WPO</span><a href="mailto:hola@elevatewpo.com">hola@elevatewpo.com</a></div></footer>
<?php wp_footer(); ?>
</body>
</html>
