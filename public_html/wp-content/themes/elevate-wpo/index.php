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
		<a href="tel:+34607443958">+34 607 443 958</a>
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
			<a class="button" href="mailto:info@elevatedigitalmente.es">Solicitar diagnóstico</a>
		</div>
	</section>
</main>
<footer class="site-footer"><div class="footer-inner"><span>© <?php echo esc_html( gmdate( 'Y' ) ); ?> Elevate WPO</span><span><a href="mailto:info@elevatedigitalmente.es">info@elevatedigitalmente.es</a> · <a href="tel:+34607443958">+34 607 443 958</a></span></div></footer>
<a class="whatsapp-button" href="https://wa.me/34607443958" aria-label="Contactar por WhatsApp" target="_blank" rel="noopener noreferrer">
	<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 3.5A11.8 11.8 0 0 0 12.08 0C5.54 0 .22 5.32.22 11.86c0 2.09.55 4.13 1.59 5.93L.12 24l6.35-1.66a11.83 11.83 0 0 0 5.61 1.42h.01c6.54 0 11.86-5.32 11.86-11.86 0-3.17-1.23-6.14-3.45-8.4ZM12.09 21.7h-.01a9.84 9.84 0 0 1-5.02-1.38l-.36-.21-3.77.99 1.01-3.67-.23-.38a9.84 9.84 0 0 1-1.51-5.19C2.2 6.43 6.63 2 12.08 2c2.64 0 5.12 1.03 6.98 2.9a9.82 9.82 0 0 1 2.89 6.99c0 5.45-4.43 9.81-9.86 9.81Zm5.4-7.37c-.3-.15-1.77-.87-2.04-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.26-.46-2.4-1.47a9.02 9.02 0 0 1-1.67-2.07c-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.49s1.07 2.89 1.22 3.09c.15.2 2.1 3.2 5.09 4.49.71.31 1.26.5 1.69.64.71.23 1.36.2 1.87.12.57-.09 1.77-.72 2.02-1.42.25-.7.25-1.3.17-1.42-.07-.12-.27-.2-.57-.35Z"/></svg>
</a>
<?php wp_footer(); ?>
</body>
</html>
