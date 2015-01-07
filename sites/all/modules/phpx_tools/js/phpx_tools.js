/**
 * @file
 * Defining behaviour for the user scripts and history entries table.
 */

(function ($) {

  Drupal.behaviors.phpx_tools = {
    attach: function (context, settings) {
      initScriptLoading();
    }
  };

  /**
   * Initialize script loading functionality
   */
  function initScriptLoading() {
    $('a.script-load').click(function () {
      $parent = $(this).parents('tr').eq(0);
      $loadLink = $('.script-load', $parent);
      var $codeCell = $('#' + $loadLink.attr('rel'), $parent);
      if (typeof codemirror != 'undefined' && typeof codemirror.editor != 'undefined') {
        codemirror.editor.setValue($codeCell.text());
      }
      else {
        $('#edit-code').val($codeCell.text());
      }
      if ($('#edit-script-name') && $('#' + $loadLink.attr('rel') + '-name', $parent)) {
        $('#edit-script-name').val($('#' + $loadLink.attr('rel') + '-name', $parent).text());
      }
      return false;
    });
  }

})(jQuery);
