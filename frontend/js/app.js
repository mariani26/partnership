/**
 * Created by NurAddina 10/11/2022.
 */
 import "../css/style.css";

 $(function(){
   //const $keranjangKuantitas = $('#keranjang-kuantitas');
   const $addToKeranjang = $('.btn-add-to-keranjang');
   //const $itemQuantities = $('.item-kuantitas');
   $addToKeranjang.click(ev => {
     ev.preventDefault();
     const $this = $(ev.target);
     const id = $this.closest('.produk-item').data('key');
     console.log(id);
     $.ajax({
       method: 'POST',
       url: $this.attr('href'),
       data: {id},
       data: JSON.stringify({id}),
       success: function(){
         console.log(arguments)
        $keranjangKuantitas.text(parseInt($keranjangKuantitas.text() || 0) + 1);
       }
     })
   })
 
 });