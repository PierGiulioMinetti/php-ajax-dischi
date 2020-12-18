import Vue from 'vue';
import axios from 'axios';

const app = new Vue ({ 
    el: '#app',
    data: {
        arrayDati : [],

    },
    created(){

        
        // Make a request for a user with a given ID
        axios.get('http://localhost/php-ajax-dischi/partial/db.php')
        .then( response => {
            // handle success
            console.log(response);
            this.arrayDati = response.data;
            console.log(this.arrayDati);
            })
            .catch( error => {
                // handle error
                console.log(error);
            });

    }
});