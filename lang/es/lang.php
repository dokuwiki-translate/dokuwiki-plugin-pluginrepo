<?php

/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 *
 * @author smocap <smocap@gmail.com>
 * @author Davit Amunarriz <urrats@gmail.com>
 * @author monica <may.dorado@gmail.com>
 */
$lang['by']                    = 'por';
$lang['last_updated_on']       = 'actualizado por última vez en';
$lang['provides']              = 'Proporciona';
$lang['compatible_with']       = 'Compatible con DokuWiki%s';
$lang['compatible_with_info']  = 'Por favor, actualiza este campo';
$lang['no_compatibility']      = '¡No se proporciona información de compatibilidad!';
$lang['compatible_unknown']    = 'desconocido';
$lang['compatible_yes']        = 'sí';
$lang['compatible_no']         = 'no';
$lang['compatible_probably']   = 'problablemente';
$lang['develonly']             = 'Sólo desarrollo';
$lang['conflicts_with']        = 'Conflictos con';
$lang['requires']              = 'Requiere';
$lang['similar_to']            = 'Similar a';
$lang['tagged_with']           = 'Etiquetado con';
$lang['needed_for']            = 'Necesario para';
$lang['securitywarning']       = 'Aviso de seguridad (por favor, lee %s):';
$lang['security_informationleak'] = 'Esta extension expone información que podría ser útil para un hacker. No se recomienda en una instalación pública.';
$lang['security_allowsscript'] = 'Esta extensión permite la ejecución de scripts. Sólo debe utilizarse cuando se confía en TODOS los editores, más adecuada en wikis personales privadas.';
$lang['security_requirespatch'] = 'Esta extensión requiere aplicar parches al núcleo de DokuWiki. Los parches manuales pueden romper la compatibilidad con otras extensiones y dificultar la seguridad de tu instalación al actualizar a la última versión.';
$lang['security_partlyhidden'] = 'Ocultar partes de una página DokuWiki no está soportado por el núcleo. La mayoría de los intentos de introducir control de ACL para las partes de una página filtrarán información a través de fuentes RSS, la búsqueda u otras funcionalidades del núcleo.';
$lang['securityissue']         = 'El siguiente problema de seguridad se informó para esta extensión:';
$lang['securityrecommendation'] = 'No se recomienda el uso de esta extensión hasta que el problema este solucionado. Los autores de extensiones deben leer el %s';
$lang['securitylink']          = 'Directrices de seguridad para complementos';
$lang['name_underscore']       = 'El nombre de la extensión contiene un guión bajo, no generará puntos de popularidad.';
$lang['name_oldage']           = 'Esta extensión no ha sido actualizada en al menos 2 años. Puede que ya no tenga soporte o no sea mantenida y tenga problemas de compatibilidad.';
$lang['extension_obsoleted']   = '<strong>Esta extensión está marcada como obsoleta.</strong>. Por lo tanto, está oculta en el Administrador de Extensiones y en la lista de extensiones. Además, es candidata para ser eliminada. ';
$lang['missing_downloadurl']   = 'La ausencia de una URL de descarga, significa que esta extensión no puede instalarse mediante el Administrador de Extensiones. Consulta <a href="/devel:plugins#publishing_a_plugin_on_dokuwikiorg" class="wikilink1" title="devel:plugins">Publicar un complemento en dokuwiki.org</a>. Se recomienda usar repositorios públicos como GitHub, GitLab o Bitbucket.';
$lang['wrongnamespace']        = 'Esta extensión no está en el espacio de nombres \'complemento\' o \'plantilla\' y, por lo tanto, se ignora.';
$lang['downloadurl']           = 'Descargar';
$lang['bugtracker']            = 'Reportar errores';
$lang['sourcerepo']            = 'Repositorio';
$lang['source']                = 'Fuente';
$lang['donationurl']           = 'Donar';
$lang['more_extensions']       = 'y %d más';
$lang['t_search_plugins']      = 'Buscar Complementos';
$lang['t_search_template']     = 'Buscar Plantillas';
$lang['t_searchintro_plugins'] = 'Filtra los complementos disponibles por tipo o utilizando la nube de etiquetas. También puedes buscar dentro del espacio de nombres del complemento, utilizando el cuadro de búsqueda.';
$lang['t_searchintro_template'] = 'Filtra las plantillas disponibles utilizando la nube de etiquetas. También puedes buscar dentro del espacio de nombres de la plantilla, utilizando el cuadro de búsqueda.';
$lang['t_btn_search']          = 'Buscar';
$lang['t_btn_searchtip']       = 'Buscar dentro del espacio de nombres';
$lang['t_filterbytype']        = 'Filtrar por tipo';
$lang['t_typesyntax']          = 'Los complementos %s amplían la sintaxis básica de DokuWiki.';
$lang['t_typeaction']          = 'Los complementos %s sustituyen o amplían la funcionalidad básica de DokuWiki';
$lang['t_typeadmin']           = 'Los complementos %s proporcionan herramientas de administración adicionales';
$lang['t_typerender']          = 'Los complementos %s añaden nuevos modos de exportación o sustituyen al renderizador XHTML estándar';
$lang['t_typehelper']          = 'Los complementos %s proporcionan funcionalidad compartida por otros complementos';
$lang['t_typetemplate']        = '%s cambios en la apariencia de DokuWiki';
$lang['t_typeremote']          = 'Los complementos %s añaden métodos a la RemoteAPI (RAPI) accesibles a través de servicios web';
$lang['t_typeauth']            = 'Los complementos %s añaden módulos de identificación';
$lang['t_typecli']             = 'Los complementos %s añaden comandos para usar en la interfaz de línea de comandos';
$lang['t_filterbytag']         = 'Filtrar por etiqueta';
$lang['t_availabletype']       = 'Complementos %s disponibles';
$lang['t_availabletagged']     = 'Etiquetados con \'% s\'';
$lang['t_availableplugins']    = 'Todos disponibles';
$lang['t_jumptoplugins']       = 'Ir a la primera extensión que comienza con:';
$lang['t_resetfilter']         = 'Mostrar todo (quitar filtro/ordenar)';
$lang['t_oldercompatibility']  = 'Compatible con versiones anteriores de DokuWiki';
$lang['t_name_plugins']        = 'Complemento';
$lang['t_name_template']       = 'Plantilla';
$lang['t_sortname']            = 'Ordenar por nombre';
$lang['t_description']         = 'Descripción';
$lang['t_author']              = 'Autor';
$lang['t_sortauthor']          = 'Ordenar por autor';
$lang['t_type']                = 'Tipo';
$lang['t_sorttype']            = 'Ordenar por tipo';
$lang['t_date']                = 'Última actualización';
$lang['t_sortdate']            = 'Ordenar por fecha';
$lang['t_popularity']          = 'Popularidad';
$lang['t_sortpopularity']      = 'Ordenar por popularidad';
$lang['t_compatible']          = 'Último compatible';
$lang['t_sortcompatible']      = 'Ordenar por compatibilidad';
$lang['t_screenshot']          = 'Captura de pantalla';
$lang['t_download']            = 'Descargar';
$lang['t_provides']            = 'Proporciona';
$lang['t_tags']                = 'Etiquetas';
$lang['t_bundled']             = 'incluidos';
$lang['screenshot_title']      = 'Captura de pantalla de %s';
