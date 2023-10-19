import Vue from 'vue';
import Icon from '../plugins/icons/icon.vue';

const components = {
	Icon,
};

Object.entries(components).forEach(([name, component]) => {
	Vue.component(name, component);
});
