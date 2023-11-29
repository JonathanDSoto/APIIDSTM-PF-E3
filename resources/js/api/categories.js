import axios from "./base"
export const getCategories = async (page=1) => {
    const respuesta = await axios.get("categories",{
        params:{
            page
        }
    })
    return respuesta.data;

}
export const getCategory = async (id) => {
    const respuesta = await axios.get("categories/"+id,{

    })
    return respuesta.data.data;
}

export const addCategory = async (data) => {
    const respuesta = await axios.post("categories/",{
        ...data

    })
    return respuesta.data.data;
}

export const updateCategory = async (id,data) => {
    const respuesta = await axios.patch("categories/"+id,{
        ...data

    })
    return respuesta.data.data;
}

export const deleteCategory = async (id) => {
    const respuesta = await axios.delete("categories/"+id,{


    })
    return respuesta.data.data;
}
