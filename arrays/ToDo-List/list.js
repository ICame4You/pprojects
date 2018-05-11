window.setTimeout(function() {
	let todos = [];

	let input = prompt("Enter your command");

	while (input !== "quit") {
		if (input === "list") {
			listTodos();
		} else if (input === "new") {
			addTodo();
		} else if (input === "delete") {
			deleteTodo();
		}
		input = prompt("Enter your command");
	}

	function listTodos() {
		todos.forEach(function(todo, i){
			console.log(i + ": " + todo);
		});
	}

	function addTodo() {
		var newTodo = prompt("Enter new todo");
		todos.push(newTodo);
	}

	function deleteTodo() {
		var index = prompt("Enter index of todo to delete");
		todos.splice(index, 1);
	}
}, 500);