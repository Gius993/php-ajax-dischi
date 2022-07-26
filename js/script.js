 var app = new Vue(
	{
		el: '#root',
		data:{
			database: []
		},
		methods: {
			getDataApi(){
				axios.get('http://localhost:8888/php-ajax-dischi/api.php')
				.then((dataResponse) =>{
					this.database = dataResponse.data;
					console.log(dataResponse);
				}
				);
			},
		},
		mounted(){
			this.getDataApi();
		}
	}
 );