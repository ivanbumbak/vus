jQuery(document).ready(function($) {
  // Variables for Modals
  var modalIM1 = $('#modalIM1');
  var modalIM2 = $('#modalIM2');
  var modalIM3 = $('#modalIM3');

  // Variables for Modal Openers
  var openModalIM1 = $('#scheduleIM1');
  var openModalIM2 = $('#scheduleIM2');
  var openModalIM3 = $('#scheduleIM3');

  // Function to open the Modal
  function openModal($modal, $openModal) {
    $openModal.click(function() {
      $modal.addClass('modal-open');
      $('.modal-bg').addClass('open');
    });
  }

  // Function to close the Modal on window click
  function closeModalX($modal) {
    $('.close-modal').click(function() {
      $modal.removeClass('modal-open');
      $('.modal-bg').removeClass('open');
    });
  }

  // Function to close the Modal on X
  function closeModal($modal) {
    $('.modal-bg').click(function() {
      $modal.removeClass('modal-open');
      $('.modal-bg').removeClass('open');
    });
  }

  openModal(modalIM1, openModalIM1);
  openModal(modalIM2, openModalIM2);
  openModal(modalIM3, openModalIM3);

  closeModalX(modalIM1);
  closeModalX(modalIM2);
  closeModalX(modalIM3);

  closeModal(modalIM1);
  closeModal(modalIM2);
  closeModal(modalIM3);
});
