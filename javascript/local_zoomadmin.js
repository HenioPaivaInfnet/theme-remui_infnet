/*
* Incluir este arquivo na pasta javascript do tema
* e adicionar o seguinte código ao arquivo config.php do tema:
* $THEME->javascripts_footer = array('local_zoomadmin');
*
* Definir o token abaixo de acordo com o webservice configurado.
*/
require(['jquery'], function($) {
  console.info('zoom js loaded');

  $('a[data-uuid][data-filetype="MP4"]').click(function() {
    // let href = $('a[data-title="profile,moodle"]').attr('href');
    let href = $('div.usermenu a[href*=\'user/profile.php\']').attr('href');
    let userid = href.substring(href.indexOf('id=') + 3);

    $.ajax({
      url: '../../webservice/rest/server.php?',
      data: {
        wstoken: 'a199cce22b9fba6c22ae0913e8857a6b',
        wsfunction: 'local_zoomadmin_insert_recording_participant',
        uuid: $(this).attr('data-uuid'),
        userid: userid,
      },
      success: function(response) {
        console.info(response);
      }
    });
  });
});
