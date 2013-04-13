$(document).ready(function() {
	SyntaxHighlighter.config.bloggerMode = true;
	SyntaxHighlighter.config.tagName = "pre";
	SyntaxHighlighter.defaults['toolbar'] = true;
	SyntaxHighlighter.config.strings.viewSource = "source";
	SyntaxHighlighter.config.strings.expandSource = "+ expand source";
	SyntaxHighlighter.config.strings.copyToClipboard = "copy";
	SyntaxHighlighter.config.strings.copyToClipboardConfirmation = "The code is in your clipboard now";
	SyntaxHighlighter.config.strings.print = "print";
	SyntaxHighlighter.config.stripBrs = false;
	SyntaxHighlighter.all();
});
