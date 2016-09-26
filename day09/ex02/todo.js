var lastChild = [document.getElementById("empty")];

function new_todo() {
	var todo = prompt("Please enter a new todo", "");
	if (todo === null) {
		return false;
	}
	console.log("New todo " + todo + "\n");
	var div = document.createElement('div');
	div.id = todo;
	div.style.opacity = "0";
	div.style.transition = "all 1s ease";
	div.innerHTML = '<span class="white-text">' + todo + '<i class="material-icons right" onclick="return delete_todo(this.parentNode.parentNode)">delete</i></span>';

	document.getElementById("ft_list").insertBefore(div, lastChild[0]);

	var zero = window.getComputedStyle(div).opacity;
	div.style.opacity = "1";
	div.className = "card-panel teal";

	lastChild.unshift(div);
	return false;
}

function delete_todo(node) {
//	var div = document.getElementById(node.id);
//	var zero = window.getComputedStyle(div).display;
//	div.style.display = "none";
Array.prototype.remove = function() {
    var what, a = arguments, L = a.length, ax;
    while (L && this.length) {
        what = a[--L];
        while ((ax = this.indexOf(what)) !== -1) {
            this.splice(ax, 1);
        }
    }
    return this;
};
	var parent = document.getElementById("ft_list");
	parent.removeChild(node);
	console.log(node);
	lastChild.remove(node);
	return false;
}