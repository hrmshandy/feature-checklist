const axios = require('axios');

import "./style"

import tmp from "./tmp"

const wrapper = document.getElementById('features');

wrapper.innerHTML = tmp;

const status = wrapper.querySelector('.fc__status');
const lists = wrapper.querySelector('.fc-lists');

status.addEventListener('click', function(e){
    e.stopPropagation();

    if (lists.classList.contains('is-shown')) {
        lists.classList.remove('is-shown');
    } else {
        lists.classList.add('is-shown');
    }

    document.addEventListener('click', function(){
        lists.classList.remove('is-shown');
    });
});

axios.get('/features').then(({data}) => {
    status.classList.add('is-' + data.allStatus);

    for (let item in data.items) {
        const itemData = data.items[item];
        const itemEl = document.createElement('li');
        const itemStatusEl = document.createElement('div');
        const itemLabelEl = document.createElement('div');

        itemEl.classList.add('fc-item');

        itemStatusEl.classList.add('fc-item__status');
        itemStatusEl.classList.add('is-' + itemData.status);
        itemStatusEl.innerHTML = status.innerHTML;

        itemLabelEl.classList.add('fc-item__label');
        itemLabelEl.innerHTML = itemData.label;
        
        itemEl.appendChild(itemStatusEl);
        itemEl.appendChild(itemLabelEl);

        lists.appendChild(itemEl);
    }
});

