
document.addEventListener("DOMContentLoaded", function(){
  render.showGuest();

  document.getElementById('authorize').addEventListener('click', render.clickLogin);
  document.getElementById('register_link').addEventListener('click', render.clickRegister);
  // document.getElementById('registration_submit').addEventListener("click", auth.clickRegisterButton);
  // document.getElementById('authorization_submit').addEventListener("click", auth.clickSigningButton);
  // document.getElementById('exit').addEventListener("click", auth.unLogin);
  // document.getElementsByClassName("add-todolist")[0].addEventListener("click", render.createNewTodoList);
  // document.getElementById("btn_add_task_list").addEventListener("click", render.btnAddInTodoListTask);
});
