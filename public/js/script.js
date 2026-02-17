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
});