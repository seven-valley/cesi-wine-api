# FRONT END avec JavaScript
## requete AJAX avec axios

### Demander un clef à l'api
https://www.omdbapi.com/

https://www.omdbapi.com/apikey.aspx

### utiliser le CDN de Axios
https://axios-http.com/docs/intro
```html
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
```

```html


<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js">
</script>
<script>

let film = 'star wars'    
let url = 'https://www.omdbapi.com/?apikey=efdc2275&t='+film;
// t =   => on a 1 fim
// s =   => tableau de films
async function go  (){
    const response = await axios.get(url);
    console.log(response.data);
}
go();
</script>
```

### Afficher un tableau JSON en tableau html

#### Utiliser template en js
https://developer.mozilla.org/en-US/docs/Web/HTML/Element/template

