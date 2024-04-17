console.log('test');

const { createApp } = Vue;

createApp({
    data() {
        return {
            tasks: []
        }
    },
    created() {
        this.fetchTasks();
    },
    methods: {
        fetchTasks() {
            axios.get('api.php')
                .then(response => {
                    this.tasks = response.data;
                })
                .catch(error => {
                    console.error('Errore durante il recupero dei dati:', error);
                });
        }
    }
}).mount('#app');