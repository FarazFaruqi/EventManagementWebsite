def pred():
	from sklearn.datasets import fetch_mldata
	from sklearn.decomposition import PCA
	from time import time
	from sklearn.neural_network import MLPClassifier
	start_time = time()


	from sklearn.datasets.mldata import fetch_mldata
	mnist = fetch_mldata('mnist-original', data_home='mnist_dataset/')

	train_x = mnist.data[0:60000,:]
	train_y = mnist.target[0:60000]
	test_x = mnist.data[60000:,:]
	test_y = mnist.target[60000:]

	n = 50

	pca = PCA(n_components=n, svd_solver='randomized',whiten=True)
	pca.fit(train_x)

	#Projecting the input data on the eigens on orthonormal basis
	train_x_pca = pca.transform(train_x)
	test_x_pca = pca.transform(test_x)

	mlp = MLPClassifier(hidden_layer_sizes=(100,50,), max_iter=1000,learning_rate = 'adaptive', batch_size='auto',alpha=1e-1,solver='sgd', tol=1e-3, random_state=1,learning_rate_init=0.1)

	mlp.fit(train_x_pca,train_y)

	return mlp,test_x_pca,test_y

def pred2(mlp,test_x_pca,test_y):
	y_pred = mlp.predict(test_x_pca)
	pred = 0
	for i in range(10000):
	    if y_pred[i] == test_y[i]:
	        pred += 1
	print('Accuracy ',pred)

	acc = (pred/10000) * 100
	acc = round(acc, 2)
	print('The final accuracy is ', acc,'%')

def pred3(mlp,test_image,test_y):
	test_image.shape = [1,50]
	return(mlp.predict(test_image) == test_y)
	

