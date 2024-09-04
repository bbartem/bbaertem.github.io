# bbartem.github.io

## [#StreamMonitor](https://bbartem.github.io/StreamMonitor.html)
Это веб-инструмент, предназначенный для удобного мониторинга прямых эфиров на популярных платформах, таких как YouTube, RUTUBE, ВКонтакте и ПЛАТФОРМА.

### Основные функции:
Подключение и отображение трансляций:

1. Введите ссылку на прямую трансляцию в поле соответствующего видеохостинга;
   
или
1. Нажмите на кнопку "Канал" — откроется новая вкладка с вашим каналом.
2. Скопируйте ссылку на прямую трансляцию.
3. Вставьте ссылку в поле соответствующего видеохостинга.
4. Нажмите на кнопку "Загрузить".

### Сохранение настроек
1. Нажмите на кнопку "Сохранить" для сохранения всех ссылок, вставленных в поля.
2. Будет скачан файл `config.json` в папку "Загрузки". Файл можно переименовать, не меняя расширения, по вашему усмотрению.
3. Для восстановления настроек нажмите на кнопку "Загрузить" и выберите файл.

### Переключатель `default` или `custom`
Переключатель нужен, чтобы заменить ссылки по умолчанию на ссылки ваших каналов.

### По умолчанию (default):
При нажатии на кнопку "Канал" будут по умолчанию открываться каналы церкви ст. Елизаветинской «Дом молитвы»:  
📌 *RUTUB*: https://rutube.ru/channel/24274907/  
📌 *VK Видео*: https://vk.com/video/@pobezhdayushii_v_vere  
📌 *YouTube*: https://youtube.com/@pobezhdayushii_v_vere  
📌 *ПЛАТФОРМА*: https://plvideo.ru/@pobezhdayushii_v_vere  

### Кастомные (custom):
Чтобы изменить ссылки на ваши каналы:
1. Переведите переключатель на `custom`.
2. Нажмите на кнопку "Сохранить".
3. Откройте файл `config.json` в любом текстовом редакторе и измените значения в разделе `channel`

```javascript
{
  "button": "custom",
  "channel": {
    "youtube": "Сюда нужно записать ссылку на канал YouTube",
    "rutube": "Сюда нужно записать ссылку на канал RUTUBE",
    "vk": "Сюда нужно записать ссылку на канал ВК Видео",
    "plvideo": "Сюда нужно записать ссылку на канал Платформы"
  },
  "video": {
    "youtube": "",
    "rutube": "",
    "vk": "",
    "plvideo": ""
  }
}
```
4. Сохраните файл `config.json`.
5. Вернитесь обратно в веб-инструмент StreamMonitor и нажмите на кнопку "Загрузить".  
   Теперь кнопки "Канал" будут открывать ссылки, которые вы указали.

   ![image](images/image__3_-removebg-preview.png)
