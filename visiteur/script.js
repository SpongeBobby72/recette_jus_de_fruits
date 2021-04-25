// Moteur de recherche
$(document).ready(function (){
    $('#research').keyup(function (){
        $('#result-search').html('')
        var recette = $(this).val();
        if (readFileAsDataURL() != ""){
            $.ajax({
                type: 'GET',
                url: 'recherche_recette.php',
                data: 'nom=' + encodeURIComponent(recette),
                success: function (data){
                    if (data != ""){
                        $('#result-search').append(data);
                    }else{
                        document.getElementById('result-search')
                            .innerHTML = "<div style= 'font-size: 14px; text-align: center;" +
                            " margin-top: 10px'>Aucune recette</div>"
                    }
                }
            });
        }
    })
})