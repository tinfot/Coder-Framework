 var Tag = {
	
	url : "./inc/tagsadmin.php", /* url to script handling ajax for tags - modify path here */
	path: "", /* url to tags-directory - modify path here */
	
	/**
	 * Delete the tag clicked on by sending an ajax request
	 */
	deleteTag: function(idTag, idMenu)
	{
		this.idTag = idTag; // the selected tag-id
		this.idMenu = idMenu; // the id of this menu
		$.ajax(
		{
			url: this.url,
			type: "POST",
			dataType: 'json',
			data: 
			{
				action: 'remove',
				idTag: this.idTag,
				idMenu: this.idMenu
			},
			success: function(data)
			{
				if(data.code == '1')
				{ // success
					Tag.remove(data.idTag);
					$("#tags-wrapper .message").html('');
					$("#tags-wrapper .message").removeClass('error');
				} else if(data.code = '2')
				{ // Unspecified error
					$("#tags-wrapper .message").html('An unspecified error occured.');
					$("#tags-wrapper .message").addClass('error');
				}
			}
		});
	},
	
	/**
	 * Remove/hide a tag from the list
	 */
	remove: function(idTag)
	{
		// add option to (end of) selection list
		var templ = "\n<option value=\"" + idTag + "\">" + $("#tag"+idTag+" a:first").text() + "</option>";
		$("#taglist option:last").after(templ);
		$("#taglist option[value='0']").attr('selected','selected');
		// remove tag from tags
		$("#tag"+idTag).remove();
	},
	
	/**
	 * Save the tag from the form (selected or typed) by sending an ajax request
	 */
	save: function()
	{
		this.action = ""; // reset action
		this.newtag = $("#tagnew").val(); // the typed new tag-text
		this.selectedtag = $("#taglist option:selected").val(); // the selected available tag-id
		this.idMenu = $("#idMenu").val(); // the id of this menu
		if(this.selectedtag == 0 && this.newtag.length < 2)
		{ // inputs not ok
			$("#tag_add .message").html('Your new tag is too short or you have not selected an existing tag.');
			$("#tag_add").addClass('error');
			$("#tag_list").addClass('error');
			return false;
		} else if(this.selectedtag != 0 && this.newtag.length > 2)
		{ // too many inputs ok
			$("#tag_add .message").html('You can not select an existing tag and type a new one at the same time');
			$("#tag_add").addClass('error');
			$("#tag_list").addClass('error');
			return false;		
		} else if(this.selectedtag != 0)
		{ // add selected tag
			this.action = 'add';
			this.newtag = $("#taglist option:selected").text();
			$("#tag_add .message").html('');
			$("#tag_add").removeClass('error');
			$("#tag_list").removeClass('error');
		} else if(this.newtag.length > 2)
		{ // create selected tag
			this.action = 'create';
			$("#tag_add .message").html('');
			$("#tag_add").removeClass('error');
			$("#tag_list").removeClass('error');			
		}
		$.ajax(
		{
			url: this.url,
			type: "POST",
			dataType: "json",
			data: 
			{
				action: this.action,
				idTag: this.selectedtag,
				idMenu: this.idMenu,
				content: this.newtag
			},
			success: function(data)
			{
				if(data.code == '1')
				{ // success
					Tag.show(data);
					$("#tagform .submit .message").html('');
					$("#tagform .message").removeClass('error');					
				} else if(data.code = '2')					
				{ // Unspecified error
					$("#tagform .submit .message").html('An unspecified error occured.');
					$("#tagform .message").addClass('error');
				}
			}
		});
	},
	
	/**
	 * Add the tag to the DOM tree (list of tags for food) and and show it
	 */
	show: function(data)
	{
		var templ = "\n" +
			"<div class=\"tag\" id=\"tag{idTag}\">\n" +
			"	<a href=\"" + this.path + "{tagurl}\" title=\"Show where this tag is being used\">{tag}</a>(<a href=\"#\" onclick=\"Tag.deleteTag({idTag},{idMenu}); return false;\" title=\"Remove tag on the left\">Remove</a>)\n" +
			"</div>\n";				
		templ = templ.replace(/{tag}/g, data.content);
		templ = templ.replace(/{tagurl}/g, data.contenturl);
		templ = templ.replace(/{idTag}/g, data.idTag);
		templ = templ.replace(/{idMenu}/g, data.idMenu);
		$("#tags-wrapper .message").before(templ);
		if(this.action == 'create')
		{ // empty the textarea
			$("#tagnew").val('');
			// new tag is added to food and does not need to be added to selection list
		}
		else if(this.action == 'add')
		{ // remove tag from selection list and set selection to default
			$("#taglist option:selected").remove();
			$("#taglist option[value='0']").attr('selected','selected');
		}
	}
};

/**
 * Bind the form-submit to these functions
 */
$(document).ready(function(){
	$("#newtagform").submit(function(){
		Tag.save();
		return false;
	});
});