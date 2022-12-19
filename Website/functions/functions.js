
//function to display the form which will create a new project
function showForm() {
  console.log("test 1");
  const createDiv = document.getElementById('create-project');
  if (createDiv.classList.contains('hidden')) {
    console.log("test 2");
    createDiv.classList.remove('hidden');
    createDiv.classList.add('active');
  }
  else {
    console.log("test 3");
    createDiv.classList.remove('active');
    createDiv.classList.add('hidden');
  }
}


//adds a project to the database and displays it
function createProject() {

}