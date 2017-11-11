
$(document).ready(function()
{
	$('.nuevoItem').click(function()
	{
		nuevoItem();
		var dialog = document.querySelector('dialog');
		dialogPolyfill.registerDialog(dialog);
		dialog.showModal();
	    var showDialogButton = document.querySelector('.nuevoItem');
	    if (! dialog.showModal) {
	      dialogPolyfill.registerDialog(dialog);
	    }
	    showDialogButton.addEventListener('click', function() {
	      dialog.showModal();
	    });
	    dialog.querySelector('.close').addEventListener('click', function() {
	      dialog.close();
	    });
	});
});

function nuevoItem()
{
	
}