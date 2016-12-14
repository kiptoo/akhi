<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<link href="https://select2.github.io/css/s2-docs.css" rel="stylesheet" />
<script>
$(document).ready(function() {
     function formatRepo (repo) {
         
      if (repo.loading) return repo.text;

      var markup = "<div class='select2-result-repository clearfix'>" +
        "<div class='select2-result-repository__avatar'><img src='" + repo.owner.avatar_url + "' /></div>" +
        "<div class='select2-result-repository__meta'>" +
          "<div class='select2-result-repository__title'>" + repo.full_name + "</div>";

      if (repo.description) {
        markup += "<div class='select2-result-repository__description'>" + repo.description + "</div>";
      }

      markup += "<div class='select2-result-repository__statistics'>" +
        "<div class='select2-result-repository__forks'><i class='fa fa-flash'></i> " + repo.forks_count + " Forks</div>" +
        "<div class='select2-result-repository__stargazers'><i class='fa fa-star'></i> " + repo.stargazers_count + " Stars</div>" +
        "<div class='select2-result-repository__watchers'><i class='fa fa-eye'></i> " + repo.watchers_count + " Watchers</div>" +
      "</div>" +
      "</div></div>";

      return markup;
    }

  function formatRepoSelection (repo) {
    return repo.full_name || repo.text;
  }

   $(".js-data-example-ajax").select2({
        ajax: {
          url: "https://api.github.com/search/repositories",
          dataType: 'json',
          delay: 250,
          data: function (params) {
              console.log(params);
            return {
              q: params.term // search term
              
            };
          },
          processResults: function (data,params) {
          
              console.log(data);
            params.page = params.page || 1;

                    return {
                      results: data.items,
                      pagination: {
                        more: (params.page * 30) < data.total_count
                      }
                    };
          },
          cache: true
        },
       escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
      minimumInputLength: 1,
      templateResult: formatRepo, // omitted for brevity, see the source of this page
       templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
      });
 
  });
</script>
<select class="js-data-example-ajax" style="width:100%">
  <option value="3620194" selected="selected">Select a value......</option>
</select>