!function(){!async function(){try{const t="/api/tareas?id="+d(),a=await fetch(t),n=await a.json();e=n.tareas,o()}catch(e){console.log(e)}}();let e=[],t=[];document.querySelector("#agregar-tarea").addEventListener("click",(function(){n()}));function a(a){const n=a.target.value;t=""!==n?e.filter(e=>e.estado===n):[],o()}function o(){!function(){const e=document.querySelector("#listado-tareas");for(;e.firstChild;)e.removeChild(e.firstChild)}(),function(){const t=e.filter(e=>"0"===e.estado),a=document.querySelector("#pendientes");0===t.length?a.disabled=!0:a.disabled=!1}(),function(){const t=e.filter(e=>"1"===e.estado),a=document.querySelector("#completadas");0===t.length?a.disabled=!0:a.disabled=!1}();const a=t.length?t:e;if(0===a.length){const e=document.querySelector("#listado-tareas"),t=document.createElement("LI");return t.textContent="No Hay Tareas",t.classList.add("no-tareas"),void e.appendChild(t)}const r={0:"Pendiente",1:"Completa"};a.forEach(t=>{const a=document.createElement("LI");a.dataset.tareaId=t.id,a.classList.add("tarea");const s=document.createElement("P");s.textContent=t.nombre,s.ondblclick=function(){n(!0,{...t})};const i=document.createElement("DIV");i.classList.add("opciones");const l=document.createElement("BUTTON");l.classList.add("estado-tarea"),l.classList.add(""+r[t.estado].toLowerCase()),l.textContent=r[t.estado],l.dataset.estadoTarea=t.estado,l.ondblclick=function(){!function(e){const t="1"===e.estado?"0":"1";e.estado=t,c(e)}({...t})};const u=document.createElement("BUTTON");u.classList.add("eliminar-tarea"),u.textContent="Eliminar",u.dataset.idTarea=t.id,u.ondblclick=function(){!function(t){Swal.fire({title:"¿Eliminar Tarea?",showCancelButton:!0,confirmButtonText:"Si",cancelButtonText:"NO"}).then(a=>{a.isConfirmed&&async function(t){const{estado:a,id:n,nombre:r}=t,c=new FormData;c.append("id",n),c.append("nombre",r),c.append("estado",a),c.append("proyectoId",d());try{const a="http://localhost:3000/api/eliminar",n=await fetch(a,{method:"POST",body:c}),r=await n.json();r.resultado&&Swal.fire("Eliminado!",r.mensaje,"success"),e=e.filter(e=>e.id!==t.id),o()}catch(e){console.log(e)}}(t)})}({...t})},i.appendChild(l),i.appendChild(u),a.appendChild(s),a.appendChild(i);document.querySelector(".listado-tareas").appendChild(a)})}function n(t=!1,a={}){console.log(a);const n=document.createElement("DIV");n.classList.add("modal"),n.innerHTML=`\n            <form class="formulario nueva-tarea">\n                \n                <legend>${t?"Editar Tarea":"Añade una nueva Tarea"}</legend>\n\n                <div class="campo">\n                    <label for="tarea">Tarea</label>\n                    <input id="tarea" type="text" placeholder="${a.nombre?"Edita la Tarea":"Añadir Tarea al Proyecto Actual"}" name="tarea" value="${a.nombre?a.nombre:""}" />\n                </div>\n\n                <div class="opciones">\n                    <input class="submit-nueva-tarea" type="submit" value="${a.nombre?"Editar Tarea":"Añadir Tarea"}" />\n                    <button class="cerrar-modal" type="button">Cancelar</button>\n                </div>\n\n            </form>\n        `,setTimeout(()=>{document.querySelector(".formulario").classList.add("animar")},0),n.addEventListener("click",(function(s){if(s.preventDefault(),s.target.classList.contains("cerrar-modal")){document.querySelector(".formulario").classList.add("cerrar"),setTimeout(()=>{n.remove()},600)}if(s.target.classList.contains("submit-nueva-tarea")){const n=document.querySelector("#tarea").value.trim();if(""===n)return void r("El Nombre de la Tarea es Obligatorio","error",document.querySelector(".formulario legend"));t?(a.nombre=n,c(a)):async function(t){const a=new FormData;a.append("nombre",t),a.append("proyectoId",d());try{const n="http://localhost:3000/api/tarea",c=await fetch(n,{method:"POST",body:a}),d=await c.json();if(r(d.mensaje,d.tipo,document.querySelector(".formulario legend")),"exito"===d.tipo){const a=document.querySelector(".modal");setTimeout(()=>{a.remove()},1e3);const n={id:String(d.id),nombre:t,estado:"0",proyectoId:d.proyectoId};e=[...e,n],o()}}catch(e){console.log(e)}}(n)}})),document.querySelector(".dashboard").appendChild(n)}function r(e,t,a){const o=document.querySelector(".alerta");o&&o.remove();const n=document.createElement("DIV");n.classList.add("alerta",t),n.textContent=e,a.parentElement.insertBefore(n,a.nextElementSibling),setTimeout(()=>{n.remove()},5e3)}async function c(t){const{estado:a,id:n,nombre:r,proyectoId:c}=t,s=new FormData;s.append("id",n),s.append("nombre",r),s.append("estado",a),s.append("proyectoId",d());try{const t="http://localhost:3000/api/actualizar",c=await fetch(t,{method:"POST",body:s}),d=await c.json();if(console.log(d),"exito"===d.respuesta.tipo){Swal.fire(d.respuesta.mensaje,d.respuesta.mensaje,"success");const t=document.querySelector(".modal");t&&t.remove(),e=e.map(e=>(e.id===n&&(e.estado=a,e.nombre=r),e)),o()}}catch(e){console.log(e)}}function d(){const e=new URLSearchParams(window.location.search);return Object.fromEntries(e.entries()).id}document.querySelectorAll('#filtros input[type="radio"]').forEach(e=>{e.addEventListener("input",a)})}();