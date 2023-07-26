import React from 'react';
import './App2.css';

const CategoriesPage = ({ categories }) => {
    return (
        <div className="container col-8 div_cat mt-5 py-5">
            <div className="col-lg-6 m-auto mb-5 cat_count rounded p-3">
                <h1>Toutes nos spécialités ({categories.length})</h1>
            </div>

            <div className="d-flex flex-wrap liste_cat">
                {categories.map((categorie) => (
                    <div className="card liste-cat m-auto my-3" id="card" style={{ width: '18rem' }}>
                        <span className="d-block text-center">
                            <a href={`/chemin_vers_votre_page/${categorie.id}`} style={{ textDecoration: 'none' }}>
                                {/* Affichage des noms de catégories */}
                                <h5 className="card-title p-auto text-center">
                                    <strong>Nos "{categorie.libelle.toUpperCase()}"</strong>
                                </h5>
                                {/* Partie inférieure avec l'image */}
                                <img src={`/images_the_district/category${categorie.image}`} alt="image" srcSet="" className="card-img-top img-fluid" />
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" className="bi bi-hand-index-thumb" viewBox="0 0 16 16">
                                    {/* ... */}
                                </svg>
                                Découvrir
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" className="bi bi-hand-index-thumb" viewBox="0 0 16 16">
                                    {/* ... */}
                                </svg>
                            </a>
                        </span>
                    </div>
                ))}
            </div>
        </div>
    );
};

export default CategoriesPage;
