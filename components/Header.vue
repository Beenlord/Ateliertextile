<template>
	<div class="Header f-block">
		<div class="Header__container f-block__container">
			<div class="Header__slot Header__slot_l0">
				<div class="Header__slot-title">
					<span>г. Москва</span>
				</div>
				<div class="Header__slot-value">
					<span>Херсонская ул. 20к3</span>
				</div>
			</div>
			<div class="Header__slot Header__slot_l1">
				<div class="Header__slot-title">
					<span>Время работы:</span>
				</div>
				<div class="Header__slot-value">
					<span>10:00-19:00 Ежедневно</span>
				</div>
			</div>
			<div class="Header__slot Header__slot_c"></div>
			<a class="Header__slot Header__slot_r1" href="mailto:hometextile.mn@ya.ru">
				<div class="Header__slot-title">
					<span>E-mail:</span>
				</div>
				<div class="Header__slot-value">
					<span>hometextile.mn@ya.ru</span>
				</div>
			</a>
			<a class="Header__slot Header__slot_r0" href="tel:+79164126914">
				<div class="Header__slot-title">
					<span>Номер телефона:</span>
				</div>
				<div class="Header__slot-value">
					<span>+7 (916) 412-69-14</span>
				</div>
			</a>
		</div>
	</div>
</template>

<script>

export default {
};
</script>

<style
	lang="scss"
	scoped
>
@import "../assets/style/scope";

.Header {
	min-height: rem(9);
	padding: rem(2) 0;
}

.Header__container {
	display: flex;
	gap: rem(3);
}

.Header__slot {
	flex-grow: 1;
	display: flex;
	flex-direction: column;
	justify-content: center;
	white-space: nowrap;
	color: var(--clr-blackout);

	&_c {
		width: rem(15);
		min-width: 120px;
		margin: 0 rem(5);
	}

	&_r0,
	&_r1 {
		text-align: right;
	}
}

.Header__slot-title {
	font-size: rem(1.5);
	line-height: plus(1em, 20%);
	color: var(--clr-bronze);
}

.Header__slot-value {
	font-size: rem(2);
	line-height: plus(1em, 20%);
}
</style>
