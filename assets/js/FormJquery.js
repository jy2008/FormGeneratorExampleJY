/*!
 * UF Config Manager - Config Manager Widget
 *
 * @link      https://github.com/lcharette/UF_FormJquery
 * @copyright Copyright (c) 2016 Louis Charette
 * @license   https://github.com/lcharette/UF_FormJquery/blob/master/LICENSE (MIT License)
 */

 $(document).ready(function() {

     $("#fgclient-table-box").ufTable({
         dataUrl: site.uri.public + "/api",
         useLoadingTransition: site.uf_table.use_loading_transition
     });

 });
