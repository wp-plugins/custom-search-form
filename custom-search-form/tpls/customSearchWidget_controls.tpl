<!--
This .tpl file is used when editing a widget's options in the WP manager.
It should only contain form *elements*; WordPress will supply the opening and closing <form> tags.
For each key in the ContentRotatorWidget::$control_options array, you will have the following placeholders available:
	[+your_key.id+] - used inside id attributes, e.g. id="[+your_key.id+]"
    [+your_key.name+] - used inside name attributes, e.g. name="[+your_key.name+]"
	[+your_key.value+] - contains the current value of the option WordPress appends text to the names and id's to allow for multiple instances of the widget, so don't try hard-coding values here.
    
    -->
    
<label for="[+title.id+]">Title</label><br/>
<input id="[+title.id+]" name="[+title.name+]" value="[+title.value+]" /><br/>
<label for="[+title.id+]">Search Button Text</label><br/>
<input id="[+searchButtonText.id+]" name="[+searchButtonText.name+]" value="[+searchButtonText.value+]" /><br/>