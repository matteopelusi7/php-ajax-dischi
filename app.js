const app = new Vue({
    el: '#app',
    data: {
        disks: [],
    },
    created() {

        axios.get('./server.php')
        .then(res => {
            this.disks = res.data;
        })
        
    }
});