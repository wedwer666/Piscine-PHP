
function addLi(targetUl) {
  var inputText = document.getElementById('text').value,
      li = document.createElement('li'),
      textNode = document.createTextNode(inputText + ' '),
      removeButton = document.createElement('button');
  
  if (inputText.split(' ').join('').length === 0) {
    alert('No input');
    return false;
  }
  
  removeButton.className = 'removeMe';
  removeButton.innerHTML = ' DONE!';
  removeButton.setAttribute('onclick', 'removeMe(this);');
  
  li.appendChild(textNode);
  li.appendChild(removeButton);
  targetUL=document.getElementById("list");
  targetUL.innerHTML="<li>"+inputText+"<button class=\"removeMe\" onclick=\"removeMe(this);\"> DONE!</button></li>"+targetUl.innerHTML;
  
}

function removeMe(item){
  var parent = item.parentElement;
  parent.parentElement.removeChild(parent);
}
