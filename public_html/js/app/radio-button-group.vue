<template>
	<div>
	    <span v-for="option of options"> 
	        <input class="custom-control-input" type="radio" v-model="selected" :value="option" 
	        	:id="name + option[optionKey]">
	        <label class="custom-control-label" :for="name + option[optionKey]">
	        	<slot name="option" v-bind:option="option">
	        		{{ option[optionLabel] }}
	        	</slot>
	        </label>
	        <br>
	    </span>
	</div>
</template>

<script>

/**
 * Группа radio-button для выбора одной опции из списка. Обязательные свойства
 *   options - массив доступных для выбора опций. Каждая опция - это объект со свойствами id и name (названия можно переопределить, 
 *     см. ниже). Свойство name должно содержать метку опции на русском (будет автоматичеки локализовано).
 * Компонент поддерживает директиву v-model - выбранная опция. 
 * Опционально можно задать:
 *   name - уникальное имя компонента (если на одной странице необходимо разместить несколько компонент)
 *   option-label - название свойства, содержащее метку опции
 *   option-key - название свойства, содержащее уникальный инентификатор опции
 * Отображение метки можно кастомизировать через слот option.
 */

export default {
	data () {
		return {
			// Выбранная опция
			selected: null,
		};
	},

	props: {

		// Доступные для выбора опции
		options: {
			type: Array,
			default() {
				return [];
			},
		},

		// Выбранная опция
		value: {
			default: null,
		},

		// Уникальное имя компонента
		name: {
			type: String,
			default: "radio",
		},

		// Название свойства, содержащее метку опции
		optionLabel: {
			type: String,
			default: "name",
		},

		// Название свойства, содержащее уникальный инентификатор опции
		optionKey: {
			type: String,
			default: "id",
		},		

	},

	watch: {

		// Пользователь выбрал новую опцию
		selected: function (val) {
			this.$emit('input', this.selected);
		},

		// Родительский компонент изменил выбранную опцию
		value: function (val) {
			this.selected = this.value;
		},

	},
	
	/**
	 * Mounted event
	 */
	mounted: function () {
		this.selected = this.value;
	},

};
</script>