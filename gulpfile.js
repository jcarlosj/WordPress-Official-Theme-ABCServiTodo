/**
 * >> Carga Plugins. <<
 * Importa, Carga plugins de Gulp y asigna a variables con nombres descriptivos.
 */
const gulp = require( 'gulp' );                                 // Gulp

// Complementos relacionados con CSS.
const sass = require( 'gulp-sass' ),                            // Gulp plugin para la compilación de Sass.
      minifycss = require( 'gulp-uglifycss' ),                  // Minimiza los archivos CSS.
      autoprefixer = require( 'gulp-autoprefixer' ),            // Agrega prefijos CSS automática.
      mmq = require( 'gulp-merge-media-queries' );              // Combine las consultas de medios coincidentes en uno.

// Complementos utilitarios.
const rename = require( 'gulp-rename' ),                        // Renombra archivos E.g. style.css -> style.min.css.
      lineec = require( 'gulp-line-ending-corrector' ),         // Terminaciones de línea consistentes para sistemas no UNIX. Complemento de Gulp para corrector de final de línea (una utilidad que se asegura de que sus archivos tengan finales de línea consistentes).
      filter = require( 'gulp-filter' ),                        // Le permite trabajar en un subconjunto de los archivos originales al filtrarlos usando un globo.
      sourcemaps = require( 'gulp-sourcemaps' ),                // Asigna el código en un archivo comprimido (por ejemplo, style.css) a su posición original en un archivo de origen (por ejemplo, structure.scss, que luego se combinó con otros archivos css para generar style.css).
      notify = require( 'gulp-notify' ),                        // Te envía un mensaje de notificación.
      browserSync = require( 'browser-sync' ) .create(),        // Recarga el navegador e inyecta CSS. Prueba del navegador sincronizada que ahorra tiempo.
      plumber = require( 'gulp-plumber' ),                      // Prevenga la rotura de la tubería causada por errores de los complementos de Gulp.
      beep = require( 'beepbeep' );

/**
 * >> Archivo de configuración de Gulp para WordPress <<
 * 1. Edite las variables según los requisitos de su proyecto.
 * 2. En las rutas puede agregar << glob o matriz de globs >>.
 */
const config = {

    // Opciones de Proyecto.
	projectURL: 'http://localhost/projects/abcservitodo.wp/',   // URL del proyecto local de su sitio de WordPress que ya se está ejecutando. Podría ser algo como wpgulp.local o localhost: 3000 dependiendo de la configuración de WordPress local.
	productURL: './',                                           // Tema/URL del complemento. Déjelo como está, ya que nuestro gulpfile.js vive en la carpeta raíz.
	browserAutoOpen: true,
    injectChanges: true,

	// Opciones de estilo.
	styleSRC: './sass/style.scss',                              // Ruta al archivo principal .scss.
	styleDestination: './',                                     // Ruta para colocar el archivo CSS compilado. Predeterminado establecido en la carpeta raíz.
	outputStyle: 'compact',                                     // Opciones disponibles → 'compact' or 'compressed' or 'nested' or 'expanded'
	errLogToConsole: true,
	precision: 10,

	// Watch files paths.
	watchStyles: './sass/**/*.scss',                            // Ruta a todos los archivos * .scss dentro de la carpeta css y dentro de ellos.
	watchPhp: './**/*.php',                                     // Ruta a todos los archivos PHP.

	// Los navegadores que te interesan para la revisión automática. Lista de navegadores https://github.com/ai/browserslist
    // La siguiente lista se establece según los requisitos de WordPress. Aunque, siéntase libre de cambiar.
	BROWSERS_LIST: [
		'last 2 version',
		'> 1%',
		'ie >= 11',
		'last 1 Android versions',
		'last 1 ChromeAndroid versions',
		'last 2 Chrome versions',
		'last 2 Firefox versions',
		'last 2 Safari versions',
		'last 2 iOS versions',
		'last 2 Edge versions',
		'last 2 Opera versions'
	]
};

/**
 * >> Manejador de Errores Personalizado. <<
 * @param Mixed err
 */
const errorHandler = r => {
	notify .onError( '\n\n❌  ===> ERROR: <%= error .message %>\n' )( r );
	beep();

	// this .emit( 'end' );
};

/**
 * >> Task: `styles`. <<
 * Compila Sass, Autoprefixes y Minifica CSS.
 *
 * Esta tarea hace lo siguiente:
 *    1. Obtiene el archivo fuente scss
 *    2. Compila Sass a CSS
 *    3. Escribe Sourcemaps para ello.
 *    4. Autoprefixea y genera style.css
 *    5. Renombra el archivo CSS con el sufijo .min.css
 *    6. Minimiza el archivo CSS y genera style.min.css
 *    7. Inyecta CSS o vuelve a cargar el navegador a través de browserSync
 */  
gulp .task( 'styles', () => {
	return gulp. src( config .styleSRC, { allowEmpty: true })
		.pipe( plumber( errorHandler ) )
		.pipe( sourcemaps .init() )
		.pipe(
			sass({
				errLogToConsole: config .errLogToConsole,
				outputStyle: config .outputStyle,
				precision: config .precision
			})
		)
		.on( 'error', sass .logError )
		.pipe( sourcemaps .write({ includeContent: false }) )
		.pipe( sourcemaps .init({ loadMaps: true }) )
		.pipe( autoprefixer( config .BROWSERS_LIST ) )
		.pipe( sourcemaps .write( './' ) )
		.pipe( lineec() )                                       // Terminaciones de línea consistentes para sistemas no UNIX.
		.pipe( gulp .dest( config .styleDestination ) )
		.pipe( filter( '**/*.css' ) )                           // Filtrado de la secuencia a sólo archivos css.
		.pipe( mmq({ log: true }) )                             // Combinar consultas de medios solo para la versión .min.css.
		.pipe( browserSync .stream() )                          // Vuelve a cargar style.css si está en cola.
		.pipe( rename({ suffix: '.min' }) )
		.pipe( minifycss({ maxLineLen: 10 }) )
		.pipe( lineec() )                                       // Terminaciones de línea consistentes para sistemas no UNIX.
		.pipe( gulp .dest( config .styleDestination ) )
		.pipe( filter( '**/*.css' ) )                           // Filtrado de la secuencia a sólo archivos css.
		.pipe( browserSync .stream() )                          // Vuelve a cargar style.min.css si está en cola.
		.pipe( notify({ message: '\n\n✅ > Sass — CSS generados con éxito!\n', onLast: true }) );
});  

/**
 * >> Task: `browser-sync`. <<
 * Recargas en vivo, inyecciones de CSS, túnel localhost.
 * @link http://www.browsersync.io/docs/options/
 *
 * @param {Mixed} done Done.
 */
const browsersync = done => {
	browserSync .init({
		proxy: config .projectURL,
		open: config .browserAutoOpen,
		injectChanges: config .injectChanges,
		watchEvents: [ 'change', 'add', 'unlink', 'addDir', 'unlinkDir' ]
	});
	done();
};

// >> Helper para permitir la recarga del navegador con Gulp 4. <<
const reload = done => {
	browserSync .reload();
	done();
};

/**
 * >> Watch Tasks. <<
 * Observa cambios de archivos y ejecuta tareas específicas.
 */
gulp .task(
	'default',
	gulp .parallel( 'styles', browsersync, () => {
		gulp .watch( config .watchPhp, reload );                  // Recargar en los cambios de archivos PHP.
	})
);