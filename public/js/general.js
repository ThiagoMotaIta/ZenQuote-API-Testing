
// Start Quote of the Day
function getQuoteOfDay(){
    $("#dayQuote").html("<span><i class='fa fa-spin fa-spinner fa-lg'></i></span>");

    $.ajax({
        url : 'https://zenquotes.io/api/today',
        type : 'GET',
        dataType: 'json',
        crossDomain: true,
        contentType:'application/json',
        success: function(data){
            console.log(data);
            $("#dayQuote").html("");
            $("#dayQuote").html("<strong>“"+data[0].q+"”</strong><br/>Author: "+data[0].a);

        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
        }
    });

}


// Start 5 Random Quotes
function getFiveRandomQuotes(){
    $("#dayQuote").html("<span><i class='fa fa-spin fa-spinner fa-lg'></i></span>");

    $.ajax({
        url : 'https://zenquotes.io/api/quotes/',
        type : 'GET',
        dataType: 'json',
        crossDomain: true,
        contentType:'application/json',
        success: function(data){
            console.log(data);
            $("#dayQuote").html("");
            for (var i=1; i < 6; i++) {
                $("#dayQuote").append("<div class='alert alert-primary'><strong>"+i+". “"+data[i].q+"”</strong><br/>Author: "+data[i].a+"</div>");
            }

        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
        }
    });

}


// Start 10 Random Quotes
function getTenRandomQuotes(){
    $("#dayQuote").html("<span><i class='fa fa-spin fa-spinner fa-lg'></i></span>");

    $.ajax({
        url : 'https://zenquotes.io/api/quotes/',
        type : 'GET',
        dataType: 'json',
        crossDomain: true,
        contentType:'application/json',
        success: function(data){
            console.log(data);
            $("#dayQuote").html("");
            for (var i=1; i < 11; i++) {
                $("#dayQuote").append('<div class="alert alert-success"><strong>'+i+
                    '. “'+data[i].q+'”</strong><br/>Author: '+data[i].a+
                    ' <br/><a href="#" onclick="favoriteThisQuote('+i+')" title="Like this quote">'+
                    '<input id="like-quote-'+i+'" type="hidden" value="'+data[i].q+'" />'+
                    '<input id="like-author-'+i+'" type="hidden" value="'+data[i].a+'" />'+
                    '<i id="like-'+i+'" class="fa fa-heart fa-2x text-primary"></i></a></div>');
            }

        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
        }
    });

}


// List my favorite quotes
function getMyFavoriteQuotes(){
    $("#dayQuote").html("<span><i class='fa fa-spin fa-spinner fa-lg'></i></span>");

    $.ajax({
        url : 'my-quotes',
        type : 'GET',
        data: {"user_id":$('#logged-id').val(),},
        dataType: 'json',
        crossDomain: true,
        contentType:'application/json',
        success: function(data){
            console.log(data);
            $("#dayQuote").html("");
            for (var i=0; i < data.userFavoriteQuotes.length; i++) {
                $("#dayQuote").append("<div class='alert alert-success'><strong>"+
                    " “"+data.userFavoriteQuotes[i].quote+"”</strong><br/>Author: "+data.userFavoriteQuotes[i].author_name+
                    " <a href='javascript:void(0);' onclick='removeFavoriteQuote("+data.userFavoriteQuotes[i].id+")' title='Remove from Favorite Quotes'>"+
                    "<i id='trash-"+data.userFavoriteQuotes[i].id+"' class='fa fa-trash text-danger'></i></a></div>");
            }

        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
        }
    });

}


// List favorite quotes from all users
function getFavoriteQuotesFromAll(){
    $("#dayQuote").html("<span><i class='fa fa-spin fa-spinner fa-lg'></i></span>");

    $.ajax({
        url : 'all-users-quotes',
        type : 'GET',
        dataType: 'json',
        crossDomain: true,
        contentType:'application/json',
        success: function(data){
            console.log(data);
            $("#dayQuote").html("");
            for (var i=0; i < data.usersFavoriteQuotes.length; i++) {
                $("#dayQuote").append("<div class='alert alert-success'><strong>"+
                    " “"+data.usersFavoriteQuotes[i].quote+"”</strong><br/>Author: "+data.usersFavoriteQuotes[i].author_name+
                    "<br/>Favorite Quote of <strong>"+data.usersFavoriteQuotes[i].user+"</strong>");
            }

        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
        }
    });

}


// Make a Quote favorite
function favoriteThisQuote(quoteIdList){
    //$("#dayQuote").html("<span><i class='fa fa-spin fa-spinner fa-lg'></i></span>");

    $('#like-'+quoteIdList).removeAttr("class");
    $('#like-'+quoteIdList).attr("class", "fa fa-heart fa-2x text-danger");

    /*$.ajax({
        url : 'favotite-this-quote',
        type : 'POST',
        data: {
            "user_id":$('#logged-id').val(),
            "quote_text":$('#like-quote-'+quoteIdList).val(),
            "author_text":$('#like-author-'+quoteIdList).val(),
        },
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'json',
        success: function(data){
            console.log(data);
            //$("#dayQuote").html("");
            $('#like-'+quoteIdList).removeAttr("class");
            $('#like-'+quoteIdList).attr("class", "fa fa-heart fa-2x text-danger");

        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
        }
    });*/

}



// Remove a favorite quote from an user
function removeFavoriteQuote(quoteIdList){
    $("#dayQuote").html("<span><i class='fa fa-spin fa-spinner fa-lg'></i></span>");

    $.ajax({
        url : 'delete-favotite-quote/'+quoteIdList,
        type : 'DELETE',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'json',
        success: function(data){
            console.log(data);
            getMyFavoriteQuotes();

        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
        }
    });

}