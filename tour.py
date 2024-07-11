import sys
import warnings
warnings.filterwarnings("ignore")
import numpy as np, pandas as pd, nltk, re
tour = pd.read_csv(r"tour_data.csv", encoding='latin-1')
tour['tags'] = tour['type'] + " " + tour['mood']
new_tour = tour[['index','name','place','time','spend','tags']]
new_tour['tags'] = new_tour['tags'].apply(lambda x:x.lower())
from nltk.stem.porter import PorterStemmer
ps = PorterStemmer()
def stem(text):
    y = []
    for i in text.split():
        y.append(ps.stem(i))
    return " ".join(y)
new_tour['tags'] = new_tour['tags'].apply(stem)
from sklearn.feature_extraction.text import CountVectorizer
cv = CountVectorizer(max_features=300, stop_words='english')
vectors = cv.fit_transform(new_tour['tags']).toarray()
from sklearn.metrics.pairwise import cosine_similarity
similarity = cosine_similarity(vectors)
def get_index_from_title(place):
    for ind in new_tour.index:
        mond=new_tour.iloc[ind]['name']
        if re.search(place,mond):
            return(ind)
place_selec = sys.argv[1]
place_index = get_index_from_title(place_selec)
similar_places = list(enumerate(similarity[place_index]))
sorted_similar_places = sorted(similar_places,key=lambda x:x[1],reverse=True)[1:]
i=0
print("Top 5 similar travel places like "+place_selec+" are:\n")
for element in sorted_similar_places:
    print("Name: {}".format(new_tour.loc[new_tour['index'] == element[0], 'name'].values[0]))
    print("Place: {}".format(new_tour.loc[new_tour['index'] == element[0], 'place'].values[0]))
    print("Duration: {}".format(new_tour.loc[new_tour['index'] == element[0], 'time'].values[0]))
    print("Amount: Rs {} .".format(new_tour.loc[new_tour['index'] == element[0], 'spend'].values[0]))
    print('\n')
    i=i+1
    if i>4:
        break