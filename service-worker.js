// self.addEventListener('push', function(event) {
//     const data = event.data.json();
//     const options = {
//         body: data.body,
//         icon: '/icon.png'
//     };
//     event.waitUntil(
//         self.registration.showNotification(data.title, options)
//     );
// });

self.addEventListener('push',(event) =>  {

   const notification = event.data.json();

   event.waitUntil(
        self.registration.showNotification(notification.title,{
           
           body:notification.body,
           icon:"",
           data:{

            url:notification.url
           }
         
        })
    );

});

self.addEventListener("notificationclick",(event)=>{
event.waitUntil(
    clients.openWindow(event.notification.data.url)
    )



});