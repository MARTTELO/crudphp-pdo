document.addEventListener('DOMContentLoaded', function () {
  //abrir modal//
  
  const editButtons = document.querySelectorAll(".edit-btn");
  const editModal = document.getElementById("editModal");
  const closeModal = document.querySelector(".close-modal");

  editButtons.forEach((button) => {
    button.addEventListener("click", function() {
      const userId = this.getAttribute("data-id");
      const userName = this.getAttribute("data-name");
      const userEmail = this.getAttribute("data-email");

      document.getElementById("editId").value = userId;
      document.getElementById("editName").value = userName;
      document.getElementById("editEmail").value = userEmail;

      editModal.style.display = "block";
    });
  });

  //fechar modal //
  closeModal.addEventListener('click', function(){
    editModal.style.display='none';
  })

  // ao clicar fora do modal
  window.addEventListener('click', function(event){
    if(event.target === editModal){
      editModal.style.display = 'none'
    }
  })

  //validacao básica de formulários de criação
  const createForm = document.getElementById('createForm');
  createForm.addEventListener('submit', function(event) {
    const name = document.getElementById('createName').value.trim();
    const email = document.getElementById('createEmail').value.trim();

    if (!name || !email){
      event.preventDefault();
      alert("Por favor, preencha todos os campos antes de enviar.");
    }else{
        alert("Usuário adicionado com sucesso!");
    }
  });

  // confirmar exclusão de usuário
  const deleteButtons = document.querySelectorAll('.delete-btn');
  deleteButtons.forEach(button => {
    button.addEventListener('click', function(event) {
      if (!confirm("Tem certeza que deseja excluir este usuário?")) {
        event.preventDefault();
      }
    });
  });
});