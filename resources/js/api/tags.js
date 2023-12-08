import axios from "./base"
export const getTags = async (page=1, amount = 10) => {
    const respuesta = await axios.get("tags",{
        params:{
            page,
            amount
        }
    })
    return respuesta.data;

}
export const getTag = async (id) => {
    const respuesta = await axios.get("tags/"+id,{

    })
    return respuesta.data.data;
}

export const addTag = async (data) => {
    const respuesta = await axios.post("tags/",{
        ...data

    })
    return respuesta.data.data;
}

export const updateTag = async (id,data) => {
    const respuesta = await axios.patch("tags/"+id,{
        ...data

    })
    return respuesta.data.data;
}

export const deleteTag = async (id) => {
    const respuesta = await axios.delete("tags/"+id,{


    })
    return respuesta.data.data;
}
