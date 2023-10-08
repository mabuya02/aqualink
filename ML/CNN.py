

# # Function to load data
# def load_data(data_dir):
#     images = []
#     labels = []
    
#     for label in os.listdir(data_dir):
#         label_dir = os.path.join(data_dir, label)
#         if os.path.isdir(label_dir):
#             for image_file in os.listdir(label_dir):
#                 image_path = os.path.join(label_dir, image_file)
#                 if image_file.endswith('.jpg') or image_file.endswith('.png'):
#                     image = cv2.imread(image_path)
#                     image = cv2.resize(image, (224, 224))
#                     images.append(image)
#                     labels.append(label)
    
#     return np.array(images), np.array(labels)

# # Function to build the model
# def build_model(num_classes):
#     base_model = MobileNetV2(weights='imagenet', include_top=False, input_shape=(224, 224, 3))
    
#     x = base_model.output
#     x = GlobalAveragePooling2D()(x)
#     x = Dense(128, activation='relu')(x)
#     predictions = Dense(num_classes, activation='softmax')(x)
    
#     model = Model(inputs=base_model.input, outputs=predictions)
    
#     for layer in base_model.layers:
#         layer.trainable = False
    
#     model.compile(optimizer=Adam(), loss='categorical_crossentropy', metrics=['accuracy'])
#     return model

# # Load the data
# data_dir = 'path_to_dataset'
# images, labels = load_data(data_dir)

# # Preprocess data
# label_binarizer = LabelBinarizer()
# labels_one_hot = label_binarizer.fit_transform(labels)
# labels_one_hot = to_categorical(labels_one_hot)

# # Split the data into training and validation sets
# X_train, X_val, y_train, y_val = train_test_split(images, labels_one_hot, test_size=0.2, random_state=42)

# # Build the model
# num_classes = len(set(labels))
# model = build_model(num_classes)

# # Train the model
# model.fit(X_train, y_train, validation_data=(X_val, y_val), epochs=10, batch_size=32)

# # Evaluate the model
# loss, accuracy = model.evaluate(X_val, y_val)
# print('Validation Loss:', loss)
# print('Validation Accuracy:', accuracy)

# # Save the model
# model.save('endangered_species_model.h5')

# # Save the label binarizer
# with open('label_binarizer.pkl', 'wb') as f:
#     pickle.dump(label_binarizer, f)

# # Import some modules for loading and processing images
# import PIL

# # Function to load and process an image
# def load_image(image_file):
#     img = PIL.Image.open(image_file).convert('L')
#     img = img.resize((32, 32), PIL.Image.ANTIALIAS)
#     img = np.array(img) / 255
#     img = np.expand_dims(img, axis=0)
#     return img

# # Load an image
# image_file = 'path_to_image'
# image = load_image(image_file)

# # Make a prediction
# prediction = model.predict(image)
# predicted_class = np.argmax(prediction)

# # Load the label binarizer
# with open('label_binarizer.pkl', 'rb') as f:
#     label_binarizer = pickle.load(f)

# # Convert the predicted class to label
# predicted_label = label_binarizer.inverse_transform([predicted_class])

# # Display the result
# print(f'The predicted fish species for {image_file} is {predicted_label[0]}.')
